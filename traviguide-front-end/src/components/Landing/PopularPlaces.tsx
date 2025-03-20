import { Box, HStack, Text } from "@chakra-ui/react";
import PlaceCard from "./PlaceCard";
import rome from "../../assets/Landing/Rome.jpeg";
import useFetchRetaurants from "../../hooks/useFetchRetaurants";

const PopularPlaces = () => {
  const restaurants = useFetchRetaurants();
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
        {restaurants.data?.pages[0].data.map((val, index) => (
          <div>
            {index < 4 && (
              <PlaceCard
                type="restaurants"
                id={val.id}
                location={val.address}
                name={val.name}
                image={val.images.length > 0 ? val.images[0].url : rome}
              />
            )}
          </div>
        ))}
      </HStack>
    </Box>
  );
};

export default PopularPlaces;
