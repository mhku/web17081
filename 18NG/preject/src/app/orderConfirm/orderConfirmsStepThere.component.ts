import { Component, OnInit ,OnDestroy} from '@angular/core';
import {Router} from '@angular/router'

@Component({
    selector: 'step3',
    templateUrl: './orderConfirmsStepThere.component.html'
})

export class OrderConfirmThereComponentComponent implements OnInit,OnDestroy{
    count:number=5;
    myTimer:any;
    constructor(private myRouter:Router) { }

    ngOnInit() { 
        this.myTimer=setInterval(()=>{
            this.count--;
            if(this.count==0){
                clearInterval(this.myTimer);
                this.myTimer=null;
                this.myRouter.navigateByUrl('/index');
            }
        },1000)
    }
    OnDestroy(){
        if(this.myTimer){
            clearInterval(this.myTimer);
            this.myTimer=null;
        } 
    }
}