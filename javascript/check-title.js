let h2 = document.getElementById("title")
let page = window.location.pathname.split("barbershop/")[1]
let title = pathname.split(".php")[0]

function checkTitle() {
    if (title == "index" || title == "" ) {
        h2.innerText = "dashboard"
    }else{
        h2.innerText = title
    }
}

checkTitle();