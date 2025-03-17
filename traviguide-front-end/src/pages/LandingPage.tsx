import { Box } from "@chakra-ui/react";
import ImagesSlider from "../components/Landing/imagesSlider";
import PopularPlaces from "../components/Landing/PopularPlaces";
import landingShow from "../assets/Landing/landingShow.png";
import landingShow2 from "../assets/Landing/landingShow2.jpeg";
import landingShow1 from "../assets/Landing/landingShow1.png";
import landingShow3 from "../assets/Landing/landingShow3.png";
import WhatWeOffer from "../components/Landing/WhatWeOffer";
import DiscoverWonders from "../components/Landing/DiscoverWonders";
import TryNow from "../components/Landing/TryNow";

const LandingPage = () => {
  return (
    <Box mx={10} mb={20}>
      <ImagesSlider
        images={[landingShow, landingShow3, landingShow2, landingShow1]}
      />
      <WhatWeOffer /> <DiscoverWonders />
      <PopularPlaces />
      <TryNow />
    </Box>
  );
};

export default LandingPage;
