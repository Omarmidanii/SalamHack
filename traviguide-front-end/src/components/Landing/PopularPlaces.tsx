import { Box, HStack, Text } from "@chakra-ui/react";
import PlaceCard from "./PlaceCard";
import rome from "../../assets/Landing/Rome.jpeg";

const PopularPlaces = () => {
  return (
    <Box mx={10}>
      <Text textColor={"#EAB875"} fontWeight={"bold"} fontSize={32}>
        {" "}
        Popular Destinations:
      </Text>
      <Text
        ml={2}
        textColor={"gray.600"}
        mt={1.5}
        lineHeight={1.2}
        w={280}
        fontWeight={"bold"}
        fontSize={12}
      >
        below is how you can implement the slideshow using
      </Text>
      <HStack spacing={10} mt={10} ml={-2}>
        <PlaceCard image={rome} />
        <PlaceCard image={rome} />
        <PlaceCard image={rome} />
        <PlaceCard image={rome} />
      </HStack>
    </Box>
  );
};

export default PopularPlaces;
