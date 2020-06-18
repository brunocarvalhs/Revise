import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ScannerconfigPage } from './scannerconfig.page';

describe('ScannerconfigPage', () => {
  let component: ScannerconfigPage;
  let fixture: ComponentFixture<ScannerconfigPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ScannerconfigPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ScannerconfigPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
