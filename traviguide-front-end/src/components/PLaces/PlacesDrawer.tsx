import { Box, HStack, Icon, Stack, Text } from "@chakra-ui/react";
import useShow from "../../hooks/useShow";
import similarEntities from "../../entities/similarEntities";
import rome from "../../assets/Landing/Rome.jpeg";
import Rating from "../Rating";
import { FaDollarSign, FaPhone } from "react-icons/fa";
import { IoLocationSharp } from "react-icons/io5";
import { MdEditNote } from "react-icons/md";

interface Props {
  id: number;
  endpoint: string;
}
const PlacesDrawer = ({ id, endpoint }: Props) => {
  const data = useShow<similarEntities>(id, endpoint);
  return (
    <Stack
      sx={{
        direction: "rtl",
      }}
    >
      <HStack placeSelf={"center"} pb={8}>
        <Text fontSize={22} fontWeight={"bold"} mb={-6} ml={5}>
          {data.data?.data.name}
        </Text>
        <Rating rate={Number(data.data?.data.rating)} />
      </HStack>
      <Box
        placeSelf={"center"}
        m={1}
        boxShadow={`0 10px 20px -8px gray`}
        borderRadius={25}
        bgPosition={"center"}
        bgImage={
          data.data?.data.images && data.data?.data.images.length > 0
            ? data.data?.data.images[0].url
            : rome
        }
        boxSize={300}
        h={200}
        bgSize={"cover"}
        mb={12}
      />
      <HStack justifyContent={"space-evenly"} mb={10}>
        <Text>
          <Icon as={FaDollarSign} mb={-1} ml={2} boxSize={4} color={"green"} />
          {data.data?.data.price_range}
        </Text>
        <Text textAlign="right" style={{ direction: "ltr" }}>
          {data.data?.data.contacts}
          <Icon as={FaPhone} mb={-0.5} ml={2} boxSize={4} color={"gray.600"} />
        </Text>
      </HStack>
      <Text textAlign={"center"} mb={10}>
        <Icon as={MdEditNote} boxSize={5} mb={-1.5} ml={2} />
        {data.data?.data.description}
      </Text>
      <HStack alignItems={"start"}>
        <Text mt={5}>
          <Icon as={IoLocationSharp} mb={-0.5} color={"gray.600"} />
          {data.data?.data.address}
        </Text>
        <iframe
          src={data.data?.data.location}
          width="300"
          height="200"
          loading="lazy"
        />
      </HStack>
    </Stack>
  );
};

export default PlacesDrawer;
