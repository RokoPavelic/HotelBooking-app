import React, { useRef, useEffect } from "react";
import styled from "styled-components";
import Buttons from "./Buttons";

const Wrapper = styled.div`
    position: relative;
    width: 60%;
    overflow: hidden;
    box-shadow: 0 10px 15px rgba(0, 0, 0, 0.4);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
`;
const Slide = styled.div`
    display: flex;
    width: ${(props) => `${props.setWidth}`};
    height: 80vh;
    transition: transform 0.6s ease-in-out;
    transform: ${(props) => `translateX(${props.xPosition}px)`}; // (*)
    img {
        aspectRatio: 3/2;
        height: 100%;
    }
`;

// const data = [
//     {url: "../images/exterior_nightview.jpeg", width: 2287},
//     {url: "../images/exterior_backview.jpeg", width: 260},
//     {url: "../images/events_gallery_garden.jpeg", width: 900},
//     {url: "../images/events_gallery_gathering.jpeg"},
//     {url: "../images/events_gallery_maids.jpg"},
//     {url: "../images/events_gallery_table.jpg"},
//     {url: "../images/events_gallery_toast.jpg"},
// ];


function ImageSlider({
    images,
    setWidth,
    xPosition,
    handleClickPrev,
    handleClicknext,
}) {
    const slideRef = useRef();
    useEffect(() => {
        if (slideRef.current) {
            const width = slideRef.current.clientWidth;
            setWidth(width);
        }
    }, [setWidth]);
    return (
        <Wrapper>
            <Slide xPosition={xPosition} ref={slideRef}>
                {images.map((img, i) => (
                    <img src={img} alt={"images"} key={i} />
                ))}
            </Slide>
            <Buttons
                handleClickPrev={handleClickPrev}
                handleClicknext={handleClicknext}
            />
        </Wrapper>
    );
}

export default ImageSlider;

