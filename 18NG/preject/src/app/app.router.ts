// a-module-routing

import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { IndexComponent } from './index/index.component';
import {LoginComponent} from './login/login.component'
import {ListComponent} from './list/list.component'
import {CartComponent} from './cart/cart.component'
import {OrderConfirmComponent} from './orderConfirm/orderConfirm.component'
import {OrderConfirmThereComponentComponent} from './orderConfirm/orderConfirmsStepThere.component'
import {OrderConfirmTwoComponentComponent} from './orderConfirm/orderConfirmsStepTwo.component'
import {OrderConfirmOneComponentComponent} from './orderConfirm/orderConfirmsStepOne.component'


const routes: Routes = [
  {path: '', component: IndexComponent },
  {path:'cart',component:CartComponent},
  {path:'list',component:ListComponent},
  {path: 'index',component:IndexComponent},
  {path: 'step1',component:OrderConfirmOneComponentComponent},
  {path: 'step2',component:OrderConfirmTwoComponentComponent},
  {path: 'step3',component:OrderConfirmThereComponentComponent},
  {path:'order',component:OrderConfirmComponent},
  {path:'login',component:LoginComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule { }