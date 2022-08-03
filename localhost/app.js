const select = document.querySelector('select');
const allLang = ['en', 'ru', 'de'];

select.addEventListener('change', changeLang);

function changeLang(){
	let lang = select.value;
	location.href = window.location.pathname + '#' + lang;
	location.reload();
}

function chageLanguage() {
	let hash = window.location.hash;
	hash = hash.substr(1);
	if (!allLang.includes(hash)) {
		location.href = window.location.pathname + '#ru';
		location.reload();
	}
	select.value =hash;
    document.querySelector('title').innerHTML = langArr['title'][hash];
	for (let key in langArr) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr[key][hash];
        }
}
select.value =hash;
	for (let key in langArr2) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr2[key][hash];
        }
}
select.value =hash;
	for (let key in langArr3) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr3[key][hash];
        }
}
select.value =hash;
	for (let key in langArr4) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr4[key][hash];
        }
}
select.value =hash;
    for (let key in langArr5) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr5[key][hash];
        }
}
select.value =hash;
    for (let key in langArr6) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr6[key][hash];
        }
}
select.value =hash;
    for (let key in langArr7) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr7[key][hash];
        }
}
select.value =hash;
    for (let key in langArr8) {
        let elem = document.querySelector('.lng-' + key);
        if (elem) {
            elem.innerHTML = langArr8[key][hash];
        }
}
}
function changeIMG(){
    let lang = select.value;
    let hash = window.location.hash;
    hash = hash.substr(1);
    select.value =hash;
    //var pattern=/(.+)/g;
   
    if (lang=='ru'){
      document.getElementById('phone').src = 'image/PHONEERUS.png';
      document.getElementById('Button').style.marginLeft = "150px";
      document.getElementById('Button').style.marginTop = "39px";
      document.getElementById('Button').style.display = "block";
      document.getElementById('Perev2').style.marginLeft = "115px";
      document.getElementById('train5').style.marginLeft = "170px";
      document.getElementById('Nevs3').style.paddingLeft =  "340px";
      document.getElementById('Nevs3').style.paddingLeft =  "340px";
      document.getElementById('Nevs4').style.paddingLeft =  "337px";
    }
    if (lang=='en'){
      document.getElementById('phone').src = 'image/PHONEE2.png';
      document.getElementById('card2').src = 'image/CarkEng.png';
      document.getElementById('Button').style.marginLeft = "115px";
      document.getElementById('Perev2').style.marginLeft = "70px";
      document.getElementById('Perev4').style.marginLeft = "175px";
      document.getElementById('Perev5').style.marginLeft = "90px";
      document.getElementById('train5').style.marginLeft = "110px";
      document.getElementById('KT1').style.marginRight = "480px";
      document.getElementById('Nevs4').style.paddingLeft =  "160px";
      document.getElementById('Nevs6').style.paddingLeft =  "105px";
      document.getElementById('Nevs7').style.paddingLeft =  "105px";

    }
  if (lang=='de'){
      document.getElementById('phone').src = 'image/PHONEEDES.png';
      document.getElementById('card2').src = 'image/CarkEng.png';
        document.getElementById('Button').style.marginLeft = "162px";
      document.getElementById('Perev4').style.marginLeft = "260px";
      document.getElementById('Perev5').style.marginLeft = "145px";
      document.getElementById('train5').style.marginLeft = "130px";
      document.getElementById('KT1').style.marginRight = "300px";
      document.getElementById('Nevs4').style.paddingLeft =  "293px";
      document.getElementById('Nevs6').style.paddingLeft =  "65px";
      document.getElementById('Nevs7').style.paddingLeft =  "185px";
  }
}
chageLanguage();