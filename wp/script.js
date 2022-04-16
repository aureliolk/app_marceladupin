console.log("Scritp RUN")
console.log("You is Developer")



var observer = new MutationObserver( closeButton )
var config = { childList: true, attributes: true };
var targetBody = document.body

function closeButton(){
    var target = document.querySelector(".dialog-close-button i.eicon-close") 
        if(target){
            target.addEventListener("click",()=>{
                location.reload()
            })
            console.log("habilitado")
        }else{
            console.log("Desabilitado")
        }
}
observer.observe(targetBody,config)

