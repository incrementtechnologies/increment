var admin = require('firebase-admin')
export default{
  init () {
    admin.initializeApp({
      credential: admin.credential.applicationDefault(),
      databaseURL: 'https://<DATABASE_NAME>.firebaseio.com'
    })
  }
}