export default class CreateOfferHelpers {
    private roomInputs: RoomInput[] = [
        {
            id: "room_name",
            name: "Nazwa",
            size: "3",
            type: "text"
        },
        {
            id: "room_size",
            name: "Ilośc osób",
            size: "4",
            type: "number"
        },
        {
            id: "room_price",
            name: "Cena",
            size: "5",
            type: "number"
        },
        {
            id: "room_description",
            name: "Opis pokoju",
            size: "col-12",
            type: "textarea"
        }
    ];

    private createRoomInputDiv({id, name, size, type}: RoomInput): HTMLDivElement
    {
        const inputDiv = document.createElement("div");
        inputDiv.className = `col-${size}`;

        const inputLabel = document.createElement("label");
        inputLabel.className = "form-label";
        inputLabel.innerHTML = name;
        inputLabel.htmlFor = id;

        const input = document.createElement("input");
        input.id = id;
        input.className = "form-control";
        input.name = `${id}[]`;
        input.type = type;

        inputDiv.appendChild(inputLabel);
        inputDiv.appendChild(input);

        return inputDiv;
    }

    private addRoom(): void {
        const room = document.createElement("div");
        room.className = "row g-3 border pb-4";

        this.roomInputs.forEach(input => {
            room.appendChild(this.createRoomInputDiv(input));
        });

        document.getElementById("rooms").appendChild(room);
    }

    private removeRoom(): void {
        const rooms = document.getElementById("rooms");
        if (rooms.children.length > 1) {
            rooms.removeChild(rooms.lastChild);
        }
    }


    public init() {
        document.getElementById('add-room-offer-button').onclick = ev => {
            this.addRoom();
        };

        document.getElementById('remove-room-offer-button').onclick = ev => {
            this.removeRoom();
        };

        const rooms = document.getElementById("rooms");
        if (rooms.children.length == 0) {
            this.addRoom();
        }
    }
}

interface RoomInput {
    id: string;
    name: string;
    size: string;
    type: string;
}
