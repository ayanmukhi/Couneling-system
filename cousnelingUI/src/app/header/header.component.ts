import { Component, OnInit } from '@angular/core';
import { Router } from "@angular/router";
import * as jwt_decode from 'jwt-decode'; 
import { FlexLayoutModule } from '@angular/flex-layout';  


@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent implements OnInit {

  loggedInUser:string;
  loggedInUserImage:string;

  constructor(private _route: Router) { }

  ngOnInit() {
    if( localStorage.getItem('jwt')) {
      this.loggedInUser = JSON.parse(jwt_decode(localStorage.getItem("jwt"))).name;
    }
  }

  checkUserLoggedIn() {
    if( localStorage.getItem('jwt')) {
      return true;
    }
    return false;
  }

  logout() {
    localStorage.clear();
    this._route.navigate(['']);
  }

  openProfile() {

    var time = new Date().getTime();
    let token = JSON.parse(jwt_decode(localStorage.getItem('jwt')));
    if(token.role == "counselor") {
      this._route.navigate([{ outlets: { mainOutlet: ['counselor-profile', time] } }]);
    }
    else {
      this._route.navigate([{ outlets: { mainOutlet: ['seeker-profile', time] } }]);
    }
  }

}
