let merchantID = $("#id").val();
let token = $("#token").val();
let getMemberUrl = "https://us-central1-onecash.cloudfunctions.net/app/merchant/get_member?merchant_id=" + merchantID;

var requestOptions = {
    // method: 'GET',  //property not needed 
    headers: {
        "Authorization" : "Bearer" + " " + token
    },
    // redirect: 'follow' //property not needed
  };

const zgRef = document.querySelector('zing-grid');
fetch(getMemberUrl, requestOptions)
    .then(res => res.json())
    .then(data => zgRef.setData(data))
    .catch(err => console.error('--- Error In Fetch Occurred ---', err))