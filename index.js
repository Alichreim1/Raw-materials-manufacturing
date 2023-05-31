 
function themetrigger(){
    document.body.classList.toggle('dark-theme');

} 

function remove1(){
    var row = document.getElementById('deleterow1').parentElement;
    row.style.display='none';
}
function remove2(){
    var row = document.getElementById('deleterow2').parentElement;
    row.style.display='none';
}
function remove3(){
    var row = document.getElementById('deleterow3').parentElement;
    row.style.display='none';
}
function remove4(){
    var row = document.getElementById('deleterow4').parentElement;
    row.style.display='none';
}
function remove5(){
    var row = document.getElementById('deleterow5').parentElement;
    row.style.display='none';
}
function remove6(){
    var row = document.getElementById('deleterow6').parentElement;
    row.style.display='none';
}
function remove7(){
    var row = document.getElementById('deleterow7').parentElement;
    row.style.display='none';
}
function remove8(){
    var row = document.getElementById('deleterow8').parentElement;
    row.style.display='none';
}


function start(){
    theme = document.getElementById("theme");

    // ===============================================
    // if we execute this function we can add the 
    // rows and data to the table of orders in the dashboard
    // ===============================================
    // Orders.forEach(order => {
    //     const tr= document.createElement('tr');
    //     const contentoftr= `
    //         <td>${order.CustomerName}</td>
    //         <td>${order.OrderNumber}</td>
    //         <td>${order.Type}</td>
    //         <td class="${order.Payment=== 'Unpaid' ? 'danger':
    //                      order.Payment=== 'Pending' ? 'warning': 'success' }">${order.Payment}</td>
    //         <td class="primary">Details</td>
    //     `
    //     tr.innerHTML= contentoftr;
    //     document.getElementById('orderstablebody').appendChild(tr);
    // });

    theme.addEventListener('click', themetrigger);
    document.getElementById( "deleterow1" ).addEventListener(
        'click', remove1, false );
    document.getElementById( "deleterow2" ).addEventListener(
        'click', remove2, false );
    document.getElementById( "deleterow3" ).addEventListener(
            'click', remove3, false );
    document.getElementById( "deleterow4" ).addEventListener(
            'click', remove4, false );
    document.getElementById( "deleterow5" ).addEventListener(
            'click', remove5, false );
    document.getElementById( "deleterow6" ).addEventListener(
            'click', remove6, false );
    document.getElementById( "deleterow7" ).addEventListener(
            'click', remove7, false );
    document.getElementById( "deleterow8" ).addEventListener(
            'click', remove8, false );


   





}

 window.addEventListener('load', start, false);