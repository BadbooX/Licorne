function deleteBooking($id){
    var id = $id;
    
    $.post('deleteBooking.php', {
        id:id
}, 
    function(returnedData){
       
    window.location.href = String(returnedData);
});
}