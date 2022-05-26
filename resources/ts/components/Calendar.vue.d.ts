import { Vue } from 'vue-property-decorator';
import { DateRange } from '../Types/DateRange';
export default class Calendar extends Vue {
    disabledDates: DateRange[];
    private onInput;
}
