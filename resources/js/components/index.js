import Alpine from "alpinejs";
import Select from './Select'
import DateTime from './DateTime'

window.Select = Select;
window.DateTime = DateTime;

Alpine.data('Select', Select);
Alpine.data('DateTime', DateTime);