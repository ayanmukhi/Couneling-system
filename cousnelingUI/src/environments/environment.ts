// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.

export const environment = {
  loginApi: 'http://filemaker/public/index.php/api/v1/login',
  getUsersApi: 'http://filemaker/public/index.php/api/v1/users/counselors',
  userApi: 'http://filemaker/public/index.php/api/v1/users',
  appointmentApi : 'http://filemaker/public/index.php/api/v1/appointedSeeker',
  bookingApi : 'http://filemaker/public/index.php/api/v1/bookedCounselor',
  uploadFile : 'http://filemaker/public/index.php/upload',
  media : "http://filemaker/public/index.php/api/v1/media/video",
  availabilityApi : "http://filemaker/public/index.php/api/v1/availabilities",
  production: false
};

/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.
