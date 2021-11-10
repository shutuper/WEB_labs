import {NgModule} from '@angular/core';
import {RouterModule, Routes} from '@angular/router';
import {EgorComponent} from "./egor/egor.component";
import {AppComponent} from "./app.component";

const routes: Routes = [
  {path: 'ira'},
  {path: 'sahsa'},
  {path: 'egor'},
  {path: 'dima'},
  {path: '', component: EgorComponent}];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule {
}
