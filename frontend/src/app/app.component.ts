import { Component } from '@angular/core';
import {HttpClient,HttpParams,HttpHeaders} from '@angular/common/http';
import {Room} from './Room';
import {Observable} from 'rxjs/Observable'
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'frontend';
  readonly ROOT_URL='http://localhost:8000/api';
  // rooms:Observable<Room[]>;
  rooms:Observable<any>;
  newRoom:Observable<any>;
  users:any;
  constructor(private http:HttpClient){}

  getRooms(){
  	let parms= new HttpParams().set('type_id', '1');
  	// this.rooms=this.http.get<Room[]>(this.ROOT_URL +'/rooms',{parms})
  	this.rooms=this.http.get(this.ROOT_URL +'/rooms',{parms})
  }

  createRoom(){
const data:Room={
	id:null,
	type_id:4,
	created_at:null,
	updated_at:null,
}
this.newRoom=this.http.post(this.ROOT_URL+'/addroom',data);


  }
  getUsers(){
  	this.users=this.http.get(this.ROOT_URL +'/users')
  }
}

