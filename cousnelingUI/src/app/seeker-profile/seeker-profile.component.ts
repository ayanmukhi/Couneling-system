import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { jwtDeocde } from '../shared/jwt-decode';
import { GetSeeker } from '../ResponseClasses/getSeeker';
import { MatDialog } from '@angular/material';
import { CousnelorUpdateComponent } from '../cousnelor-update/cousnelor-update.component';
import { GetAppointedSeeker } from '../ResponseClasses/getAppointedSeeker';
import { Router } from '@angular/router';
import { StarRatingComponent } from "ng-starrating";
import { FormGroup, FormBuilder, FormArray } from '@angular/forms';

interface rating {
  success : boolean;
  message : string;
}


@Component({
  selector: 'app-seeker-profile',
  templateUrl: './seeker-profile.component.html',
  styleUrls: ['./seeker-profile.component.css']
})
export class SeekerProfileComponent implements OnInit {

  profile:boolean = false;
  personalDetails:boolean = true;
  bookingsDetails:boolean = false;
  edit:boolean = false;
  date:Date;
  stars : string;
  step:number = 0;
  public name:string;
  seekerDetails:GetSeeker;
  contactDetails : any;
  appointmentType : any;
  counselorDetails : GetAppointedSeeker;
  counselorFetch : boolean;
  rating : string;
  currentBooking : string;

  constructor(private _api:ApiService, private counselorDialog : MatDialog, private _route: Router, private _fb : FormBuilder) { }

  ngOnInit() {
    let token = JSON.parse(jwtDeocde(localStorage.getItem("jwt")));
    this._api.getUser(token.id)
    .subscribe(
      data => this.saveCounselorData(data),
      error => console.log(error)
    );
  }


  deleteAccount() {
    let result = confirm("Are you sure to delete this");
    if( result ) {
      this._api.deleteUser(this.seekerDetails.data.id)
      .subscribe(
        data => {
          
          localStorage.clear();
          this._route.navigate([{ outlets: { mainOutlet: null } }]);
          
         },
        error => console.log(error)
      )
    }
  }

  onRate(event:{oldValue:number, newValue:number, starRating:StarRatingComponent}) {

    var newStars = event.newValue;
    this.stars = newStars.toString();
    console.log( "rated as : " + this.stars);
    var newForm  = this._fb.group({
      rating: [this.stars],
      bookingId: [this.currentBooking]
    });
    console.log(newForm.value);
    this._api.updateRating( newForm.value )
    .subscribe(
      data => console.log(data),
      error => console.log(error)
    ) 

  }


  getDimension(event) {
    console.log("dimension : " + event.path[0].width);
    event.path[0].height = event.path[0].width;
  }

  saveCounselorData(counselor) {
    this.seekerDetails = counselor;
    console.log(this.seekerDetails.data);
    this.profile = true;

  }
  
  details(specifics) {
    if( specifics == "personal") {
      this.personalDetails = true;
      this.bookingsDetails = false;
    }
    else {
      this.personalDetails = false;
      this.bookingsDetails = true;
    }
    //console.log("personal : " + this.personalDetails + "\nbookings : " + this.bookingsDetails + "\nedit : " + this.edit);
  }

  dialogOpen() {
    console.log("openning diaog");
    var dialog =this.counselorDialog.open(CousnelorUpdateComponent, {
      data : this.seekerDetails
    });
    dialog.afterClosed().subscribe(
      result => {
        let token = JSON.parse(jwtDeocde(localStorage.getItem("jwt")));
        this._api.getUser(token.id)
        .subscribe(
          data => this.saveCounselorData(data),
          error => console.log(error)
        );
      }
      
    )
  }


  appointmentDetails( oldRating, availabilityId, BookingId) {
    console.log(oldRating);
    this.currentBooking = BookingId;
    this._api.getBookedCounselor(availabilityId)
    .subscribe(
      data => {
        this.saveSeekerDetails(data);
        this.stars = oldRating;
      },
      error => console.log(error)
    );

  }

  saveSeekerDetails( data ) {
    this.contactDetails = data;
    console.log(this.contactDetails);
    this.counselorFetch = true;
  }

}
