import { useParams } from "react-router-dom";

const RoomDetail = ({ rooms }) => {
    console.log(rooms);
    const { id } = useParams();
    const room = rooms?.find((room) => room.id === id);
    console.log(room);
    return (
        <div>
            <img src={`/images/${room?.backgroundImg}`} />
        </div>
    );
};

export default RoomDetail;
