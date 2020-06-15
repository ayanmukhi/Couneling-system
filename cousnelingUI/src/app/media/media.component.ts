import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { AllMediaResponse } from "./../ResponseClasses/getAllMediaResponse";

@Component({
  selector: 'app-media',
  templateUrl: './media.component.html',
  styleUrls: ['./media.component.css']
})
export class MediaComponent implements OnInit {

  mediaRecieved : boolean = false;
  mediae : AllMediaResponse;
  constructor(private _apiservice : ApiService) { }

  ngOnInit() {
    this._apiservice.getAllMedia()
    .subscribe(
      data => {
        this.mediae = data;
        this.mediaRecieved = true;
        console.log(this.mediae);
      },
      error => console.log(error)
    )
  }

}