import { Button, HStack, Icon, Stack, Text } from "@chakra-ui/react";
import plane from "../../assets/Landing/Picsart_25-03-17_20-30-03-802.png";
import ImagesGrid from "./ImagesGrid";
import { FaArrowRight } from "react-icons/fa6";
import { useNavigate } from "react-router-dom";

const DiscoverWonders = () => {
  const navigate = useNavigate();
  return (
    <HStack
      justifyContent={"space-evenly"}
      pb={32}
      boxSize={900}
      bgImg={plane}
      mx={-10}
      bgRepeat={"no-repeat"}
      w={"inherit"}
      bgPos={"right"}
      bgSize={1100}
      mb={40}
    >
      <Stack>
        <Text lineHeight={1.3} fontSize={44} fontWeight={"bold"} width={400}>
          Discover the World's{" "}
          <text style={{ color: "rgba(55, 70, 69, 0.40)" }}>Hidden</text>{" "}
          Wonders
        </Text>
        <Text w={450} mt={5}>
          This sofa is perfect for modern tropical spaces, baroque inspired
          spaces, earthy toned spaces and for people wholove a chic design with
          a sprinkle of vintage design.
        </Text>
        <Button
          mt={2}
          w={160}
          h={12}
          borderRadius={50}
          textColor={"white"}
          bgColor={"#6AB4B0"}
          onClick={() => navigate("/places")}
        >
          discover more{" "}
          <Icon
            as={FaArrowRight}
            color={"white"}
            boxSize={3.5}
            mb={-1}
            ml={1.5}
          />
        </Button>
      </Stack>
      <ImagesGrid />
    </HStack>
  );
};

export default DiscoverWonders;
