import { Component, OnInit } from '@angular/core';
import {Router} from '@angular/router'

@Component({
    selector: 'step1',
    templateUrl: './orderConfirmsStepOne.component.html',
    styleUrls:['assets/css/order_confirm.css']
})

export class OrderConfirmOneComponentComponent implements OnInit {
    constructor(private myRouter:Router) { }

    ngOnInit() { }

    jump(){
        this.myRouter.navigateByUrl('/step2');
    }
}