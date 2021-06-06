//exibir infos no modal
function viewEvent(event) {
    let eventStartDate = convertDate(event.started_at)
    let eventEndDate = convertDate(event.ended_at)
    document.getElementById('event-id').innerHTML = "Evento #" + event.id
    document.getElementById('event-name').innerHTML = event.name
    document.getElementById('event-description').innerHTML = event.description
    document.getElementById('event-category').innerHTML = event.categories_id
    document.getElementById('event-date-start').innerHTML = eventStartDate
    document.getElementById('event-date-end').innerHTML = eventEndDate
    document.getElementById('event-id-delete').innerHTML = "Tem certeza que deseja excluir o evento " + event.id + "?"
}

//converter data do modal
function convertDate(date) {
    let p = date.split(/\D/g)
    return [p[2],p[1],p[0]].join("/") + " " + [p[3],p[4]].join(":")
}

//setar rota ao excluir
$(document).click(function (e) {
    if($(e.target).is('#deleteEventButton')) {
        let target = $(e.target)
        let route = target.data('url')
        $('#eventDeleteForm').attr("action", route)
    }
})