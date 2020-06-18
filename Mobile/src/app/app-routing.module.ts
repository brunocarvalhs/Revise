import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'home', loadChildren: () => import('./home/home.module').then( m => m.HomePageModule)},
  { path: 'sistema', loadChildren: './pages/tabs/tabs.module#TabsPageModule' },
  { path: 'cadastro', loadChildren: './cadastro/cadastro.module#CadastroPageModule' },
  { path: 'checklist', loadChildren: './pages/checklist/checklist.module#ChecklistPageModule' },
  { path: 'config', loadChildren: './pages/scannerconfig/scannerconfig.module#ScannerconfigPageModule'},
  { path: 'add-veiculo', loadChildren: './pages/add-veiculo/add-veiculo.module#AddVeiculoPageModule' },
  { path: 'detalhes', loadChildren: './pages/detalhes/detalhes.module#DetalhesPageModule' },
  { path: 'anuncio-detalhes', loadChildren: './pages/anuncio-detalhes/anuncio-detalhes.module#AnuncioDetalhesPageModule' }
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules })
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
