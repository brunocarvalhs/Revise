import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { VeiculosPage } from './veiculos.page';

describe('VeiculosPage', () => {
  let component: VeiculosPage;
  let fixture: ComponentFixture<VeiculosPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ VeiculosPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(VeiculosPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
