/*import { Box } from "@chakra-ui/react";
import landingShow from "../../assets/landingShow.png";

const ImagesSlider = () => {
  return (
    <div>
      <Box
        boxSize={600}
        w={"inherit"}
        borderRadius={36}
        mt={5}
        bgImage={landingShow}
        bgRepeat={"no-repeat"}
        bgSize={"cover"}
      />
    </div>
  );
};

export default ImagesSlider;*/

import {
  Box,
  Flex,
} from "@chakra-ui/react";
import { useState, useEffect } from "react";

interface SlideshowProps {
  images: string[];
  interval?: number;
}

const ImagesSlider = ({ images, interval = 7000 }: SlideshowProps) => {
  const [currentIndex, setCurrentIndex] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentIndex((prevIndex) => (prevIndex + 1) % images.length);
    }, interval);

    return () => clearInterval(timer);
  }, [images.length, interval]);

  return (
    <Box h={"400"} my={40} >
      <Box position="relative">
        {images.map((slide, index) => (
          <Flex
            key={index}
            justify="center"
            align="center"
            h="300px"
            opacity={index === currentIndex ? 1 : 0}
            transition="opacity 3s ease-in-out"
            position="absolute"
            inset={0}
          >
            <Box
              boxSize={600}
              w={1800}
              borderRadius={36}
              mt={5}
              bgImage={slide}
              bgPos={'center'}
              bgRepeat={"no-repeat"}
              bgSize={"cover"}
            />
          </Flex>
        ))}
      </Box>
    </Box>
  );
};

export default ImagesSlider;
