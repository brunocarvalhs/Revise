import { Component, OnInit } from '@angular/core';
import { BluetoothSerial } from '@ionic-native/bluetooth-serial/ngx';
import { AlertController, ToastController } from '@ionic/angular';

@Component({
  selector: 'app-scannerconfig',
  templateUrl: './scannerconfig.page.html',
  styleUrls: ['./scannerconfig.page.scss'],
})
export class ScannerconfigPage implements OnInit {

  pairedList: pairedlist;
  listToggle: boolean = false;
  pairedDeviceID: number = 0;
  dataSend: string = "";
  name: string;
  constructor
    (
      private bluetoothSerial: BluetoothSerial,
      private AlertCtrl: AlertController,
      private toastCtrl: ToastController
    ) {
    this.checkBluetoothEnabled();
  }

  ngOnInit() {
  }

  Alert(titulo, texto) {

  }

  checkBluetoothEnabled() {
    this.bluetoothSerial.isEnabled().then(success => {
      this.listPairedDevices();
    }, error => {
      this.showError("Please Enable Bluetooth")
    });
  }

  listPairedDevices() {
    this.bluetoothSerial.list().then(success => {
      this.pairedList = success;
      this.listToggle = true;
    }, error => {
      this.showError("Please Enable Bluetooth")
      this.listToggle = false;
    });
  }

  selectDevice() {
    let connectedDevice = this.pairedList[this.pairedDeviceID];
    if (!connectedDevice.address) {
      this.showError('Select Paired Device to connect');
      return;
    }
    let address = connectedDevice.address;
    this.name = connectedDevice.name;

    this.connect(address)
  }

  connect(address) {
    // Attempt to connect device with specified address, call app.deviceConnected if success
    this.bluetoothSerial.connect(address).subscribe(success => {
      this.deviceConnected();
      this.showToast("Successfully Connected");
    }, error => {
      this.showError("Error:Connecting to Device");
    });
  }

  deviceConnected() {
     // Subscribe to data receiving as soon as the delimiter is read
     this.bluetoothSerial.subscribe('\n').subscribe(success => {
      this.handleData(success);
      this.showToast("Connected Successfullly");
    }, error => {
      this.showError(error);
    });
  }

  deviceDisconnected() {
    // Unsubscribe from data receiving
    this.bluetoothSerial.disconnect();
    this.showToast("Device Disconnected");
  }

  handleData(data) {
    this.showToast(this.dataSend);
  }

  sendData() {
    this.dataSend+='\n';
    this.showToast(this.dataSend);

    this.bluetoothSerial.write(this.dataSend).then(success => {
      this.showToast(success);
    }, error => {
      this.showError(error)
    });
  }

  async showError(error) {
    const alert = await this.AlertCtrl.create({
      header: '',
      subHeader: error,
      buttons: ['Dismiss']
    });
    await alert.present();
  }

  async showToast(message) {
    const toast = await this.toastCtrl.create({
      message: message,
      duration: 2000
    });
    await toast.present();
  }

}

interface pairedlist {
  "class": number,
  "id": string,
  "address": string,
  "name": string
}
