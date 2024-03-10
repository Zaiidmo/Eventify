$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$(document).on('input', '#search-form', function (e) {
// e.preventDefault();

var search = $('input[name="search"]').val();
$.ajax({
url: '/search',
type: 'GET',
data: {
search: search
},

success: function (response) {
console.log(response.events)
displayEvents(response.events);
}

});
});
function displayEvents(events) {
    // console.log(events);
let articleContainer = document.getElementById("events-container");
articleContainer.innerHTML = "";
events.forEach(event => {
articleContainer.innerHTML += `
<a class="flex flex-col group bg-component border shadow-sm rounded-xl overflow-hidden hover:shadow-lg transition "
    href="/events/${event.id}">
    <div class="relative pt-[50%] sm:pt-[60%]  rounded-t-xl overflow-hidden">
        <img class=" absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-t-xl"
            src="/storage/uploads/events/${event.poster}" alt="Event Photo">
    </div>
    <div class="flex justify-between p-4 md:p-5">
        <div>
            <h3 class="text-lg font-bold text-white">
                ${event.title}
            </h3>
            <p class="mt-1 text-subtle">
                Category : ${event.category.name}
            </p>
        </div>
        <div>
            <h3 class="text-lg font-bold text-white">
                ${event.remaining_time} </h3>

        </div>
    </div>
</a>
`
});
}
