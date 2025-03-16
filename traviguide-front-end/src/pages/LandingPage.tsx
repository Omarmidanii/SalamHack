import { Box } from "@chakra-ui/react";
import ImagesSlider from "../components/Landing/imagesSlider";
import PopularPlaces from "../components/Landing/PopularPlaces";

const LandingPage = () => {
  return (
    <Box mx={10} mb={20}>
      <ImagesSlider />
      <PopularPlaces />
    </Box>
  );
};

export default LandingPage;
