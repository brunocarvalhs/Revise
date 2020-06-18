import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AnunciosPage } from './anuncios.page';

describe('AnunciosPage', () => {
  let component: AnunciosPage;
  let fixture: ComponentFixture<AnunciosPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AnunciosPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AnunciosPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
