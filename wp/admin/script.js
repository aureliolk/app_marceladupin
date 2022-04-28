console.log("Scritp Admin is Runing")

const trataments = document.querySelector("li#menu-posts-trataments")
const appoiments = document.querySelector("li#toplevel_page_jet-apb-appointments")

if(trataments && appoiments){
    trataments.insertAdjacentElement("afterend",appoiments)
}

const checkappoitables = setInterval(() => {
    const appoimentsTables = document.querySelector(".cx-vue-list-table")
    if(appoimentsTables){
        document.querySelector(".list-table-heading__cell.cell--user_name").remove()
        document.querySelectorAll(".list-table-item__cell.cell--user_name").forEach((x)=>{x.remove()})
        document.querySelector(".list-table-heading__cell.cell--user_id").remove()
        document.querySelectorAll(".list-table-item__cell.cell--user_id").forEach((x)=>{x.remove()})
        clearInterval(checkappoitables)
        console.log('Stop Appoiment Tables')
    }
    console.log("Element not Found")
}, 1000);

