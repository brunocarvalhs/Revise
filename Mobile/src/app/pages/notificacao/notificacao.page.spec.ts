import { CUSTOM_ELEMENTS_SCHEMA } from '@angular/core';
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { NotificacaoPage } from './notificacao.page';

describe('NotificacaoPage', () => {
  let component: NotificacaoPage;
  let fixture: ComponentFixture<NotificacaoPage>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NotificacaoPage ],
      schemas: [CUSTOM_ELEMENTS_SCHEMA],
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NotificacaoPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
