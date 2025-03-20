import {
  Button,
  HStack,
  Icon,
  Stack,
  Text,
} from "@chakra-ui/react";
import { LuTentTree } from "react-icons/lu";
import { IoFastFoodOutline } from "react-icons/io5";
import { TbBed } from "react-icons/tb";
import useFetchHotels from "../../hooks/useFetchHotels";
import useFetchRetaurants from "../../hooks/useFetchRetaurants";
import useFetchEntPlaces from "../../hooks/useFetchEntPlaces";
import PlaceCard from "../Landing/PlaceCard";
import landingShow3 from "../../assets/Landing/landingShow3.jpeg";
import { FaArrowRight } from "react-icons/fa6";
import { useNavigate } from "react-router-dom";

const Category = () => {
  const navigate = useNavigate();
  const hotels = useFetchHotels();
  const restaurants = useFetchRetaurants();
  const activities = useFetchEntPlaces();

  return (
    <Stack mt={80} placeItems={"center"} fontFamily={"initial"}>
      <Text fontSize={40} mb={5}>
        <Icon as={TbBed} boxSize={7} mr={5} color={"#EAB875"} />
        HOTELS <Icon as={TbBed} boxSize={7} ml={4} color={"#EAB875"} />
      </Text>
      <HStack spacing={10} ml={56}>
        {hotels.data?.pages[0].data.map((val, index) => (
          <div>
            {index < 4 && (
              <PlaceCard
              type="hotels"
                id={val.id}
                location={val.address}
                name={val.name}
                image={val.images.length > 0 ? val.images[0].url : landingShow3}
              />
            )}
          </div>
        ))}
      </HStack>
      <Button
        placeSelf={"end"}
        mt={5}
        mr={14}
        w={160}
        h={12}
        mb={36}
        borderRadius={50}
        textColor={"white"}
        bgColor={"#6AB4B0"}
        fontSize={14}
        fontFamily={"sans-serif"}
        onClick={() => navigate("/places/hotels")}
      >
        More Hotels{" "}
        <Icon as={FaArrowRight} color={"white"} boxSize={3.5} ml={1.5} />
      </Button>

      <Text fontSize={40} mb={5}>
        <Icon as={IoFastFoodOutline} boxSize={7} mr={5} color={"#EAB875"} />
        RESTAURANTS{" "}
        <Icon as={IoFastFoodOutline} boxSize={7} ml={4} color={"#EAB875"} />
      </Text>
      <HStack spacing={10} ml={56}>
        {restaurants.data?.pages[0].data.map((val, index) => (
          <div>
            {index < 4 && (
              <PlaceCard
              type="restaurants"
                id={val.id}
                location={val.address}
                name={val.name}
                image={val.images.length > 0 ? val.images[0].url : landingShow3}
              />
            )}
          </div>
        ))}
      </HStack>
      <Button
        placeSelf={"end"}
        mt={5}
        mr={14}
        w={180}
        h={12}
        mb={36}
        borderRadius={50}
        textColor={"white"}
        bgColor={"#6AB4B0"}
        fontSize={14}
        fontFamily={"sans-serif"}
        onClick={() => navigate(`/places/restaurants`)}
      >
        More Restaurants{" "}
        <Icon as={FaArrowRight} color={"white"} boxSize={3.5} ml={1.5} />
      </Button>

      <Text fontSize={40} mb={5}>
        <Icon as={LuTentTree} boxSize={7} mr={5} color={"#EAB875"} />
        ACTIVITIES <Icon as={LuTentTree} boxSize={7} ml={4} color={"#EAB875"} />
      </Text>
      <HStack spacing={10} ml={56}>
        {activities.data?.pages[0].data.map((val, index) => (
          <div>
            {index < 4 && (
              <PlaceCard
              type="entertainmentplaces"
                id={val.id}
                location={val.address}
                name={val.name}
                image={val.images.length > 0 ? val.images[0].url : landingShow3}
              />
            )}
          </div>
        ))}
      </HStack>
      <Button
        placeSelf={"end"}
        mt={5}
        mr={14}
        w={200}
        h={12}
        mb={36}
        borderRadius={50}
        textColor={"white"}
        bgColor={"#6AB4B0"}
        fontSize={14}
        fontFamily={"sans-serif"}
        onClick={() => navigate("/places/entertainmentplaces")}
      >
        More Activity Places{" "}
        <Icon as={FaArrowRight} color={"white"} boxSize={3.5} ml={1.5} />
      </Button>
    </Stack>
  );
};

export default Category;
