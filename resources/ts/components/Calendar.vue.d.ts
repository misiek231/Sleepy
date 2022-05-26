import { Vue } from 'vue-property-decorator';
export default class Calendar extends Vue {
    test: any;
    created(): void;
    attributes: {
        key: string;
        highlight: boolean;
        dates: ({
            start: Date;
            end: Date;
            span?: undefined;
        } | {
            start: Date;
            span: number;
            end?: undefined;
        })[];
    }[];
    private onInput;
}
