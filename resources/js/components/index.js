import Alpine from "alpinejs";
import Select from './Select'
import DateTime from './DateTime'
import Scheduler from './Scheduler'

window.Select = Select;
window.DateTime = DateTime;
window.Scheduler = Scheduler;

Alpine.data('Select', Select);
Alpine.data('DateTime', DateTime);
Alpine.data('Scheduler', Scheduler);