import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { Routes, RouterModule } from '@angular/router';

import { IonicModule } from '@ionic/angular';

import { AnuncioDetalhesPage } from './anuncio-detalhes.page';

const routes: Routes = [
  {
    path: '',
    component: AnuncioDetalhesPage
  }
];

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RouterModule.forChild(routes)
  ],
  declarations: [AnuncioDetalhesPage]
})
export class AnuncioDetalhesPageModule {}
