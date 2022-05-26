<template>
    <v-date-picker
        is-range
        :value="null"
        @input="onInput"
        color="red"
        :attributes="attributes"
        :disabled-dates='{ weekdays: [1, 7] }'
    />
</template>

<script lang="ts">
import { Component, Prop, Vue } from 'vue-property-decorator'


@Component({})
export default class Calendar extends Vue {

    @Prop({default: 'siema'}) test: any;

    created() {
        console.log('created');
        console.log(this.test);
    }

    attributes = [
        {
            key: 'today',
            highlight: true,
            dates: [
                { start: new Date(2022, 4, 2), end: new Date(2022, 4, 5) },
                { start: new Date(2022, 4, 15), span: 5 } // # of days
            ]
        }
    ]

    private onInput(value: any): void {
        // @ts-ignore
        window.onCalendarInput(value);
    }

}
</script>
