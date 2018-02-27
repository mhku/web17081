import { Component, OnInit } from '@angular/core';
import {Router} from '@angular/router'

@Component({
    selector: 'step2',
    templateUrl: './orderConfirmsStepTwo.component.html',
    styleUrls:['assets/css/payment.css']
})

export class OrderConfirmTwoComponentComponent implements OnInit {
    constructor(private myRouter:Router) { }

    ngOnInit() { }
    jumpTo(){
        this.myRouter.navigateByUrl('/step3');
    }
}