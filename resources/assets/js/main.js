import Alpine from 'alpinejs'
 
window.Alpine = Alpine

Alpine.store('skills', {
    list: [
        {lang:'HTML',progress:'80%'},
        {lang:'CSS',progress:'80%'},
        {lang:'Tailwind',progress:'70%'}, 
        {lang:'Javascript',progress:'40%'},
        {lang:'AlpineJS',progress:'50%'},
        {lang:'PHP',progress:'70%'},
        {lang:'Laravel',progress:'60%'},
        {lang:'Livewire',progress:'40%'}, 
    ]
})

Alpine.start()

