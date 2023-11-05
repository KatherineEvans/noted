import moment from "moment";

export function formatDate() {
    function dateFormatter(date) {
        return moment(date).format("ll");
    }

    return {
        dateFormatter,
    };
}
