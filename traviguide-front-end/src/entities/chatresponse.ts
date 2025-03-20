export default interface chatRes{
    status:boolean,
    data:{
        choices:{message:{role:string, content:string}}[]
    }
}