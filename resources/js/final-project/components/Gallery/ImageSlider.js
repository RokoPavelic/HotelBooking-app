import React, { useRef, useEffect } from 'react';
import styled from 'styled-components';
import Buttons from './Buttons';

const Wrapper = styled.div`
  position: relative;
  width: 76%;
  overflow: hidden;
  box-shadow: 0 10px 15px rgba(0, 0, 0, 0.4);
`;
const Slide = styled.div`
  display: flex;
  width: 100%;
  height: 80vh;
  transition: transform 0.6s ease-in-out;
  transform: ${props => `translateX(${props.xPosition}px)`}; // (*)
img {
    width: 100%;
    height: 100%;
  }
`;

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
          <img src={img} alt={'images'} key={i} />
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