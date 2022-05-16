console.log("Scritp Admin is Runing")

const trataments = document.querySelector("li#menu-posts-trataments")
const appoiments = document.querySelector("li#toplevel_page_jet-apb-appointments")

if(trataments && appoiments){
    trataments.insertAdjacentElement("afterend",appoiments)
}

if(document.URL == 'https://marceladupin.com/wp-admin/admin.php?page=jet-apb-appointments'){
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
}

const displayName = document.querySelector('li#wp-admin-bar-my-account').children[0].children[0].innerText
if(displayName == 'Marcela Dupin'){
    document.querySelector('li#menu-posts').remove()
    document.querySelector('li#menu-media').remove()
    document.querySelector('li#menu-pages').remove()
    document.querySelector('li#toplevel_page_woocommerce').remove()
    document.querySelector('li#menu-posts-product').remove()
    document.querySelector('li#toplevel_page_wc-admin-path--analytics-overview').remove()
    document.querySelector('li#toplevel_page_woocommerce-marketing').remove()
    document.querySelector('li#toplevel_page_elementor').remove()
    document.querySelector('li#menu-posts-elementor_library').remove()
    document.querySelector('li#toplevel_page_envato-elements').remove()
    document.querySelector('li#toplevel_page_elementskit').remove()
    document.querySelector('li#toplevel_page_jet-dashboard').remove()
    document.querySelector('li#toplevel_page_woofunnels').remove()
    document.querySelector('li#menu-appearance').remove()
    document.querySelector('li#menu-plugins').remove()
    document.querySelector('li#menu-users').remove()
    document.querySelector('li#menu-tools').remove()
    document.querySelector('li#menu-settings').remove()
    document.querySelector('li#toplevel_page_jet-engine').remove()
    document.querySelectorAll('.wp-menu-separator').forEach((x)=>{x.remove()})
}