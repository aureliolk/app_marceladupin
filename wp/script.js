console.log("Scritp RUN")
console.log("You is Developer")



var observer = new MutationObserver(closeButton)
var config = { childList: true, attributes: true };
var targetBody = document.body

function closeButton() {
    var target = document.querySelector(".dialog-close-button i.eicon-close")
    if (target) {
        target.addEventListener("click", () => {
            location.reload()
        })
        console.log("habilitado")
    } else {
        console.log("Desabilitado")
    }
}
observer.observe(targetBody, config)


var siteFR = 'https://marceladupin.com/'
var siteBr = 'https://marceladupin.com/index.php/home-br/'
var siteEng = 'https://marceladupin.com/index.php/home-en/'

if (document.URL == siteFR) {
    console.log('Site em Frances')
} else if (document.URL == siteBr) {

    console.log('Site em Portugues')

} else if (document.URL == siteEng) {
    console.log('Site em Ingles')
}