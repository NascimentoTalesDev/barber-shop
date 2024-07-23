const asideItems = document.querySelectorAll(".aside-item")
let pathname = window.location.pathname.split("barbershop/")[1]

function checkPathname() {
    if (pathname == "") {
        asideItems[0].classList.add("active")
    }else if (pathname.includes("new-client") || pathname.includes("edit") ) {
        asideItems[1].classList.add("active")
    }else{       
        asideItems.forEach(item => {
            if (item.href.includes(pathname) && pathname !== "") {
                item.classList.add("active")
            }else{
                item.classList.remove("active")
            }
        })
    }
}

checkPathname();