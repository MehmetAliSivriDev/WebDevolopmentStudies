function Validate()
{
    var name = document.getElementById("name");
    var email = document.getElementById("emailAdress");
    var pass = document.getElementById("pass");
    var passConf = document.getElementById("passConfirm");
    var postCode = document.getElementById("postCode");
    var cityOption = document.getElementById("cityOption");

    var emailError;
    var passError;
    var passConfError;
    var postCodeError;
    var cityOptionError;

    if(email.value.length == "" || !email.value.includes("@") || !email.value.includes(".com"))
    {
        document.getElementById("errorEmail").innerHTML = "<b>Lütfen Geçerli Bir E-Mail Adresi Giriniz!</b>";
        emailError = true;
    }
    else
    {
        emailError = false;
    }
    
    if(pass.value.length == 0)
    {
        document.getElementById("errorPass").innerHTML = "<b>Boş Şifre Giremezsiniz!</b>";
        passError = true;
    }
    else if(pass.value.length < 5)
    {
        document.getElementById("errorPass").innerHTML = "<b>Şifreniz 5 Karakterden Fazla Olmalı!</b>";
        passError = true;
    }
    else
    {
        passError = false;
    }
    

    if(passConf.value != pass.value)
    {
        document.getElementById("errorPassConf").innerHTML = "<b>Şifreler Uyuşmuyor!</b>";
        passConfError = true;
    }
    else
    {
        passConfError = false;
    }

    if(postCode.value.length != 5)
    {
        document.getElementById("errorPostCode").innerHTML = "<b>Post Kodu 5 Karekter Olmalı</b>";
        postCodeError = true;
    }
    else
    {
        postCodeError = false;
    }

    if(form.SehirSecim.value == 0)
    {
        document.getElementById("errorCityOption").innerHTML = "<b>Lütfen Bir Şehir Seçiniz!</b>";
        cityOptionError = true;
    }
    else
    {
        cityOptionError = false;
    }

    if(emailError == false && passError == false && passConfError == false &&  postCodeError == false
        && cityOptionError == false)
        {
            document.getElementById("ConfirmAll").innerHTML = "<b>Kaydınız Başarılı Şekilde Oluşturuldu!</b>";
        }

}


function tableRowAdd()
{

    var table = document.getElementById("table");
    var row = table.insertRow(satirSayi);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);

    cell1.style.backgroundColor = "green";
    cell2.style.backgroundColor = "green";

    var satir = document.getElementById("table").getElementsByTagName("tr");
    var satirSayi = satir.length;

    cell1.innerHTML = "Satir" + (satirSayi) + " Sutun 1";
    cell2.innerHTML = "Satir" + (satirSayi) + " Sutun 2";

}

function tableDeleteRow()
{
    var table = document.getElementById("table");
    var satir = document.getElementById("table").getElementsByTagName("tr");

    document.getElementById("table").deleteRow((satir.length - 1));
}