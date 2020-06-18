import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TabsPage } from './tabs.page';

const routes: Routes = [
  {
    path: '',
    component: TabsPage,
    children: [
      {
        path: '',
        children: [
          {
            path: '',
            loadChildren: '../notificacao/notificacao.module#NotificacaoPageModule',
          }
        ]
      },
      {
        path: 'perfil',
        children: [
          {
            path: '',
            loadChildren: '../perfil/perfil.module#PerfilPageModule'
          }
        ]
      },
      {
        path: 'scanner',
        children: [
          {
            path: '',
            loadChildren: '../scanner/scanner.module#ScannerPageModule'
          }
        ]
      },
      {
        path: 'notificacao',
        children: [
          {
            path: '',
            loadChildren: '../notificacao/notificacao.module#NotificacaoPageModule'
          }
        ]
      },
      {
        path: 'veiculos',
        children: [
          {
            path: '',
            loadChildren: '../veiculos/veiculos.module#VeiculosPageModule'
          }
        ]
      },
      {
        path: 'anuncios',
        children: [
          {
            path: '',
            loadChildren: '../anuncios/anuncios.module#AnunciosPageModule'
          }
        ]
      },
    ],
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})

export class TabsPageRoutingModule  { }
