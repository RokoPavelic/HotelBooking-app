import React, { useState, useEffect } from "react";
import ImageSlider from "./ImageSlider";
import styled from "styled-components";

const Wrapper = styled.div`
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #white;
`;
export default function App() {
    const [index, setIndex] = useState(0);
    const [width, setWidth] = useState(0);
    const [xPosition, setXPosition] = useState(0);
    const [imageWidth, setImageWidth] = useState(0);

    const imageWidthData = [683, 998, 2000, 1000, 3000];


    const images = [
        "../images/exterior_nightview.jpeg",
        "../images/exterior_garden.jpeg",
        "../images/interior_library.jpeg",
        "../images/events_gallery_garden.jpeg",
        "../images/events_gallery_gathering.jpeg",
        "../images/events_gallery_maids.jpg",
        "../images/events_gallery_table.jpg",
        "../images/events_gallery_toast.jpg",
    ];

    const handleClickPrev = () => {
        if (index === 0) return;
        setIndex(index - 1);
        setXPosition(xPosition + width);
        setImageWidth(imageWidthData[i - 1] + imageWidth);
    };
    const handleClicknext = () => {
        if (index === images.length - 1) {
            setIndex(0);
            setXPosition(0);
            setImageWidth(imageWidthData[i.length - 1]);
        } else {
            setIndex(index + 1);
            setXPosition(xPosition - width);
            setImageWidth(imageWidthData[i + 1] + imageWidth);
        }
    };

    useEffect(() => {
        const handleAutoplay = setInterval(handleClicknext, 3000);
        return () => clearInterval(handleAutoplay);
    }, [handleClicknext]);

    return (
        <Wrapper className="App">
            <ImageSlider
                setImageWidth={setImageWidth}
                images={images}
                setWidth={setWidth}
                xPosition={xPosition}
                handleClickPrev={handleClickPrev}
                handleClicknext={handleClicknext}
            />
        </Wrapper>
    );
}
