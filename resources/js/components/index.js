import Alpine from "alpinejs";
import Select from './Select'
import DateTime from './DateTime'
import Scheduler from './Scheduler'
import App from './App'

window.Select = Select;
window.DateTime = DateTime;
window.Scheduler = Scheduler;
window.App = App;

Alpine.data('Select', Select);
Alpine.data('DateTime', DateTime);
Alpine.data('Scheduler', Scheduler);
Alpine.data('App', App);
