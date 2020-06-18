import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AddVeiculoPage } from './add-veiculo.page';

describe('AddVeiculoPage', () => {
  let component: AddVeiculoPage;
  let fixture: ComponentFixture<AddVeiculoPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AddVeiculoPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AddVeiculoPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
