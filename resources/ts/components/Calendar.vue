<template>
    <v-date-picker
        is-range
        :value="null"
        @input="onInput"
        color="red"
        :disabled-dates="disabledDates"
    />
</template>

<script lang="ts">
import { Component, Prop, Vue } from 'vue-property-decorator'
import { DateRange } from '../Types/DateRange';

@Component({})
export default class Calendar extends Vue {

    @Prop({default: null}) disabledDates: DateRange[]

    //private attributes: any[];

    // created() {
    //     console.log('created');
    //     console.log(this.disabledDates);
    //
    //     this.attributes = [
    //         {
    //             key: 'today',
    //             highlight: true,
    //             dates: [
    //                 { start: new Date(2022, 4, 2), end: new Date(2022, 4, 5) },
    //                 { start: new Date(2022, 4, 15), span: 5 } // # of days
    //             ]
    //         }
    //     ]
    // }



    private onInput(value: any): void {
        // @ts-ignore
        if(window.onCalendarInput) {
            // @ts-ignore
            window.onCalendarInput(value);
        }
    }

}
</script>
